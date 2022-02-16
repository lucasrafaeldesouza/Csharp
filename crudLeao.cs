/*
Grupo: Rafael, Lucas e Maria
Data: 15/02/2022 
*/


using System;
using System.Collections.Generic;

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
            set {
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
            set {
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
            set {
                if (value > 0) alimentacao = value;
                else
                {
                    throw new Exception("Apenas números positivos");
                }
            }
        }
}

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
                if(l == null)
                {
                    leoes.Add(leao);
                }else
                {
                    resultado = false;
                }
            }
            catch (Exception erro)
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

//Programa Principal    
class Programa
{
  static int ShowMenu()
        {
            Console.Clear();
            Console.WriteLine(" ===== Gerenciamento de Leão ===== ");
            Console.WriteLine("Escolha uma opção: ");
            Console.WriteLine("[1] Cadastrar um Leão");
            Console.WriteLine("[2] Excluir um Leão");
            Console.WriteLine("[3] Alterar um Leão");
            Console.WriteLine("[4] Listar Leões");
            Console.WriteLine("[5] Sair");
            Console.Write("Sua escolha: ");
            int op = Convert.ToInt32(Console.ReadLine());
            return op;
        }
        static void Main(string[] args)
        {
            ListaLeoes listaLeoes = new ListaLeoes();
            List<Leao> lista = new List<Leao>();
            Leao leao = new Leao();
            int id = 0;
            int op = 0;
            
            while (op != 5)
            {
                op = ShowMenu();
                Console.Clear();
                switch (op)
                {
                    case 1: //inserir os leões
                        Console.WriteLine("Cadastrar Leão");
                        leao = new Leao();
                        Console.Write("Id: ");
                        leao.Id = Convert.ToInt32(Console.ReadLine());
						
                        Console.Write("Nome: ");
                        leao.Nome = Console.ReadLine();
						
                        Console.Write("Descrição da Jaula: ");
                        leao.Descricao = Console.ReadLine();
						
                        Console.Write("Visitantes: ");
                        leao.Visitantes = Convert.ToInt32(Console.ReadLine());
						
                        Console.Write("Alimentação: ");
                        leao.Alimentacao = Convert.ToInt32(Console.ReadLine());
						
                        if (listaLeoes.Inserir(leao))
                        {
                            Console.WriteLine("\n**** Leão cadastrado **** ");
                        }
                        else
                        {
                            Console.WriteLine("\n**** Erro ao cadastrar Leão **** ");
                        }
                        Console.ReadKey();
                        break;
                    case 2: //excluir os leões
                        Console.WriteLine("Excluir Leão");
                        Console.Write("Informe o ID do Leão: ");
                        id = Convert.ToInt32(Console.ReadLine());
                        if (listaLeoes.Excluir(id))
                        {
                            Console.WriteLine("\n**** Leão deletado **** ");
                        }
                        else
                        {
                            Console.WriteLine("\n**** Erro ao deletar Leão **** ");
                        }
                        Console.ReadKey();
                        break;
                    case 3: //Alterar os leões
                        Console.WriteLine("Alterar Leão");
                        leao = new Leao();
                        Console.Write("Id: ");
                        leao.Id = Convert.ToInt32(Console.ReadLine());
						
                        Console.Write("Nome: ");
                        leao.Nome = Console.ReadLine();
						
                        Console.Write("Descrição da Jaula: ");
                        leao.Descricao = Console.ReadLine();
						
                        Console.Write("Visitantes: ");
                        leao.Visitantes = Convert.ToInt32(Console.ReadLine());
						
                        Console.Write("Alimentação: ");
                        leao.Alimentacao = Convert.ToInt32(Console.ReadLine());
						
                        if (listaLeoes.Alterar(leao))
                        {
                            Console.WriteLine("\n**** Leão alterado **** ");
                        }
                        else
                        {
                            Console.WriteLine("\n**** Erro ao alterar Leão **** ");
                        }
                        Console.ReadKey();
                        break;
                    case 4: //Listar todos os leões
                        Console.WriteLine("Listar Leões");
                        foreach (var l in listaLeoes.Leoes)
                        {
                            Console.Write("Id: " + l.Id);
                            Console.Write(" - Nome: " + l.Nome);
                            Console.Write(" - Descrição da Jaula: " + l.Descricao);
                            Console.Write(" - Visitantes: " + l.Visitantes);
                            Console.WriteLine(" - Alimentação: " + l.Alimentacao);
                        }
                        Console.WriteLine("\nAperte qualquer tecla para continuar...");
                        Console.ReadKey();
                        break;
                    default:
                        break;
                }
            }
        }
}