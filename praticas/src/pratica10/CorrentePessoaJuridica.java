package pratica10;

public class CorrentePessoaJuridica extends Conta{

	@Override
	public void cadastrarPessoaFísica() {
		return;		
	}

	@Override
	public void validarPessoaFisicaSPC() {
		return;
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
		System.out.println("Pessoa Jurídica cadastrada.");		
	}

	@Override
	public void validarPessoaJuridicaReceitaFederal() {
		System.out.println("Pessoa Jurídica validada pela Receita.");
		
	}

}