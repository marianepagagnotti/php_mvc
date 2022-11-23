using System;
using System.Collections.Generic;
using System.Text;
using SQLite;

namespace AppCarrinhoDeCompras.Model
{
    public class Produto
    {
        [PrimaryKey, AutoIncrement]
        public int id { get; set; }
        public string descricao { get; set; }
        public double quantidade { get; set; }
        public double preco { get; set; }

    }
}
