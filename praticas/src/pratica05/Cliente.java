/* @author Raniel Mendonça - 11321BCC024 e Amanda Souza - 11421BCC036 */

package pratica05;

import java.util.Calendar;
import java.util.Date;
import java.util.Locale;

public class Cliente {
	 
	public static void main(String[] args) {
		
		Locale local = new Locale("en", "US");
		Moeda.getMoeda(local);
		Calendar calendar = Calendar.getInstance(local);
	    Date data = null; 
		Conta conta = new Conta();
		int numeroConta = conta.getId();
		CalculadorDeBalanco calcular = new CalculadorDeBalanco();
		AdapterCalculadorDeBalanco adapter = new AdapterCalculadorDeBalanco(calcular, local);
		calcular.calcularBalanco(numeroConta, calendar);		
		adapter.balancoPara(conta, data);
		
	}

}