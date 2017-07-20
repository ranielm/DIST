package pratica06;

import java.util.Calendar;
import java.util.Date;
import java.util.Locale;

public class AdapterCalculadorDeBalanco implements ResolverBalanco{

	CalculadorDeBalanco original;
	Locale local;
	Date data;
	
	//definir local e a partir daí definir moeda
    
    public AdapterCalculadorDeBalanco(CalculadorDeBalanco original, Locale local) {
        this.original = original;
        this.local = local;
    }
    
    @Override
    public Dinheiro balancoPara(Conta conta, Date data) {
    
	    Calendar calendar = Calendar.getInstance(local);
	    ((Calendar) calendar).setTime(data);
     
    return Dinheiro.valorDe(
    		original.calcularBalanco(conta.getId(), calendar),
    		Moeda.getMoeda(local)
    );
     
    }
    
}