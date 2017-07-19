package pratica10;

public class CorrentePessoaFisica extends Conta {

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
		System.out.println("Limite configurado.");
	}

	@Override
	public void solicitarCartãoCrédito() {
		System.out.println("Cartão de crédito solicitado.");
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