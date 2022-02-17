using System;
using System.Collections.Generic;
using System.Linq;
using Models;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Hosting;
using Microsoft.Extensions.Configuration;
using Microsoft.Extensions.Hosting;
using Microsoft.Extensions.Logging;

namespace Controllers
{
    public class ListaLeoes
    {
        private List<Leao> leoes;
        public List<Leao> Leoes
        {
            get
            {
                return leoes;
            }
        }

        public ListaLeoes()
        {
            leoes = new List<Leao>();
        }

        public Boolean Inserir(Leao leao)
        {
            Boolean resultado = true;
            try
            {
                Leao l = leoes.Find(x => x.Id == leao.Id);
                if (l == null)
                {
                    leoes.Add(leao);
                }
                else
                {
                    resultado = false;
                }
            }
            catch (Exception)
            {
                resultado = false;
            }
            return resultado;
        }

        public Boolean Alterar(Leao leao)
        {
            Boolean resultado = false;
            Leao l = leoes.Find(x => x.Id == leao.Id);
            if (l != null)
            {
                l.Nome = leao.Nome;
                l.Descricao = leao.Descricao;
                l.Visitantes = leao.Visitantes;
                l.Alimentacao = leao.Alimentacao;
                resultado = true;
            }
            return resultado;
        }

        public Boolean Excluir(int id)
        {
            Boolean resultado = false;
            Leao l = leoes.Find(x => x.Id == id);
            if (l != null)
            {
                resultado = leoes.Remove(l);
            }
            return resultado;
        }

        public List<Leao> Localizar(String nome)
        {
            List<Leao> tl = leoes.FindAll(x => x.Nome.Contains(nome.ToUpper()));
            return tl;
        }
    }
}