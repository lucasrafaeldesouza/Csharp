using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Hosting;
using Microsoft.Extensions.Configuration;
using Microsoft.Extensions.Hosting;
using Microsoft.Extensions.Logging;

namespace Models
{
    public class Leao 
    {
        public Leao()
        {
            this.Id = 1;
            this.Nome = "";
            this.Descricao = "";
            this.Visitantes = 1;
            this.Alimentacao = 1;
        }

        public Leao(int id, String nome, String descricao, int visitantes, int alimentacao)
        {
            this.Id = id;
            this.Nome = nome;
            this.Descricao = descricao;
            this.Visitantes = visitantes;
            this.Alimentacao = alimentacao;
        }

        private int id;
        public int Id
        {
            get { return id; }
            set
            {
                if (value > 0) id = value;
                else
                {
                    throw new Exception("Apenas números positivos");
                }
            }
        }

        private String nome;
        public String Nome
        {
            get { return nome; }
            set { nome = value.ToUpper(); }
        }

        private String descricao;
        public String Descricao
        {
            get { return descricao; }
            set { descricao = value.ToUpper(); }
        }

        private int visitantes;
        public int Visitantes
        {
            get { return visitantes; }
            set
            {
                if (value > 0) visitantes = value;
                else
                {
                    throw new Exception("Apenas números positivos");
                }
            }
        }

        private int alimentacao;
        public int Alimentacao
        {
            get { return alimentacao; }
            set
            {
                if (value > 0) alimentacao = value;
                else
                {
                    throw new Exception("Apenas números positivos");
                }
            }
        }
    }
}