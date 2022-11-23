using System;
using System.Collections.Generic;
using System.Text;
using System.Threading.Tasks;
using AppCarrinhoDeCompras.Model;
using SQLite;

namespace AppCarrinhoDeCompras.Helper
{
    public class SQLiteDatabaseHelper
    {

        readonly SQLiteAsyncConnection _conn;

        public SQLiteDatabaseHelper(string path)
        {
            _conn = new SQLiteAsyncConnection(path);
            _conn.CreateTableAsync<Produto>().Wait();
        }
        public Task<int> insert(Produto p)
        {
            return _conn.InsertAsync(p);
        }

        public Task<List<Produto>> update(Produto p)
        {
            string sql = "UPDATE Produto SET descricao= ?, quantidade= ?, preco= ? WHERE id= ?";
            return _conn.QueryAsync<Produto>(sql, p.descricao, p.quantidade, p.preco, p.id);
        }

        /*public Task<Produto> getById(int p)
        {
            return new Produto();
        }*/

        public Task<List<Produto>> getAll()
        {
            return _conn.Table<Produto>().ToListAsync();
        }

        public Task<int> delete(int id)
        {
            return _conn.Table<Produto>().DeleteAsync(i => i.id == id);
        }

        public Task<List<Produto>> search(string q)
        {
            string sql = "SELECT * FROM Produto WHERE descricao LIKE  '%" + q + "%' ";
            
            return _conn.QueryAsync<Produto>(sql);
        }
    }
}
