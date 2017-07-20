package pratica11;

public class Or extends Operador{
	public Or(ExpressaoLogica op1, ExpressaoLogica op2){
		super(op1,op2);	
	}
	
	public boolean operacao(){
		if(getEl1().operacao() || getEl2().operacao()){
			return true;		
		}
		else 
			return false;
	}

}