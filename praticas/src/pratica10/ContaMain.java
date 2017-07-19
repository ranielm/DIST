package pratica10;

public class ContaMain {

	public static void main(String[] args) {
		CorrentePessoaFisica correnteFisica = new CorrentePessoaFisica();
		CorrentePessoaJuridica correnteJuridica = new CorrentePessoaJuridica();
		Poupanca poupanca = new Poupanca();
		correnteFisica.solicitarCartãoCrédito();
		correnteJuridica.solicitarCartãoCrédito();
		poupanca.cadastrarPessoaFísica();
	}
}