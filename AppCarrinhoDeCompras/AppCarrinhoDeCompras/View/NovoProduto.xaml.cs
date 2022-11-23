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
    public partial class NovoProduto : ContentPage
    {
        public NovoProduto()
        {
            InitializeComponent();
        }

        private async void ToolbarItem_Clicked(object sender, EventArgs e)
        {

            try
            {
                Produto p = new Produto
                {
                    descricao = txt_desc.Text,
                    quantidade = Convert.ToDouble(txt_quant.Text),
                    preco = Convert.ToDouble(txt_preco.Text),
                };

                await App.Database.insert(p);

                await DisplayAlert("Sucesso!", "Produto cadastrado", "OK");

                await Navigation.PushAsync(new Listagem());
            }
            catch (Exception ex)
            {
                DisplayAlert("Ops", ex.Message, "OK");
            }
        }
    }
}