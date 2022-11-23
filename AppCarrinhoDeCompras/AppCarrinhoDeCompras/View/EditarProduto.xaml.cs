using AppCarrinhoDeCompras.Model;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace AppCarrinhoDeCompras.View
{
    [XamlCompilation(XamlCompilationOptions.Compile)]
    public partial class EditarProduto : ContentPage
    {
        public EditarProduto()
        {
            InitializeComponent();
        }

        private async void ToolbarItem_Clicked(object sender, EventArgs e)
        {
            try
            {
                Produto produto_anexado = BindingContext as Produto;

                Produto p = new Produto
                {
                    //id =((Produto) BindingContext).id,
                    id = produto_anexado.id,
                    
                    descricao = txt_desc.Text,
                    quantidade = Convert.ToDouble(txt_quant.Text),
                    preco = Convert.ToDouble(txt_preco.Text),
                };

                await App.Database.update(p);

                await DisplayAlert("Sucesso!", "Produto editado", "OK");

                await Navigation.PushAsync(new Listagem());
            }
            catch (Exception ex)
            {
                DisplayAlert("Ops", ex.Message, "OK");
            }
        }
    }
}