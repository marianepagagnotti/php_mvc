using AppCarrinhoDeCompras.Model;
using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace AppCarrinhoDeCompras.View
{
    [XamlCompilation(XamlCompilationOptions.Compile)]
    public partial class Listagem : ContentPage
    {
        ObservableCollection<Produto> lista_Produtos = new ObservableCollection<Produto>();
        public Listagem()
        {
            InitializeComponent();

            lst_produtos.ItemsSource = lista_Produtos;
        }

        private void ToolbarItem_Clicked_Novo(object sender, EventArgs e)
        {
            try
            {
                Navigation.PushAsync(new NovoProduto());
            }catch(Exception ex)
            {
                DisplayAlert("Ops", ex.Message, "OK");
            }
        }

        private void ToolbarItem_Clicked_Somar(object sender, EventArgs e)
        {
            double soma = lista_Produtos.Sum(i => i.preco * i.quantidade);

            string msg = "O total da compra é: " + soma;
            DisplayAlert("Total", msg, "OK");
        }

        protected override void OnAppearing()
        {
            if (lista_Produtos.Count == 0)
            {
                System.Threading.Tasks.Task.Run(async () =>
                {
                    List<Produto> temp = await App.Database.getAll();

                    foreach (Produto item in temp)
                    {
                        lista_Produtos.Add(item);
                    }

                    ref_carregando.IsRefreshing = false;
                });
            }
            

            //lst_produtos.ItemsSource = lista_Produtos;
        }

        private async void MenuItem_Clicked(object sender, EventArgs e)
        {
           
            MenuItem disparador = (MenuItem) sender;
            Produto produto_selecionado = (Produto)disparador.BindingContext;
            
            bool confirmacao = await DisplayAlert("Tem certeza?", "Remover item?", "Sim", "Não");

            if (confirmacao)
            {
                await App.Database.delete(produto_selecionado.id);

                lista_Produtos.Remove(produto_selecionado);
            }
        }

        private void txt_busca_TextChanged(object sender, TextChangedEventArgs e)
        {
            string buscou = e.NewTextValue;

            System.Threading.Tasks.Task.Run(async () =>
            {
                List<Produto> temp = await App.Database.search(buscou);

                lista_Produtos.Clear();
                foreach (Produto item in temp)
                {
                    lista_Produtos.Add(item);
                }

                ref_carregando.IsRefreshing = false;
            });

        }

        private void lst_produtos_ItemSelected(object sender, SelectedItemChangedEventArgs e)
        {

            Navigation.PushAsync(new EditarProduto
            {
                BindingContext = (Produto)e.SelectedItem


            });
        }
    }
}