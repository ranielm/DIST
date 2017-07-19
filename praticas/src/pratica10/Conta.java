package pratica10;

public abstract class Conta {

	//se repete em todas as Contas
	public void depositarValorInicial(){
		System.out.println("Valor inicial depositado.");
	}
	
	public void cadastrarSenha(){
		System.out.println("Senha cadastrada.");
	}
	
	public void finalizar(){
		System.out.println("Processo de abertura de conta finalizado.");
	}
	
	//cada subclasse implementa esses métodos da sua forma
	public abstract void cadastrarPessoaFísica();
	public abstract void validarPessoaFisicaSPC();
	public abstract void configurarLimite();
	public abstract void solicitarCartãoCrédito();
	public abstract void cadastrarPessoaJurídica();
	public abstract void validarPessoaJuridicaReceitaFederal();
	
}