package pratica10;

public class Poupanca extends Conta{

	@Override
	public void cadastrarPessoaFísica() {
		System.out.println("Pessoa física cadastrada.");		
	}

	@Override
	public void validarPessoaFisicaSPC() {
		System.out.println("Pessoa física validada pelo SPC.");
	}

	@Override
	public void configurarLimite() {
		return;		
	}

	@Override
	public void solicitarCartãoCrédito() {
		return;
		
	}

	@Override
	public void cadastrarPessoaJurídica() {
		return;
	}

	@Override
	public void validarPessoaJuridicaReceitaFederal() {
		return;		
	}

}