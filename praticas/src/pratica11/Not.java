package pratica11;

public class Not extends Operador{
	public Not(ExpressaoLogica op1){
		super(op1,op1);	
	}
	
	public boolean operacao(){
		if(!getEl1().operacao()){
			return true;		
		}
		else 
			return false;
	}

}
