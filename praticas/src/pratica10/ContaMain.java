/* @author Raniel Mendonça - 11321BCC024 e Amanda Souza - 11421BCC036 */

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