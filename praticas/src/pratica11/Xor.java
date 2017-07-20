public class Xor extends Operador{
	public Xor(ExpressaoLogica op1, ExpressaoLogica op2){
		super(op1,op2);	
	}
	
	public boolean operacao(){
		if(getEl1().operacao() == true && getEl2().operacao()==false){
			return true;		
		}
		else{ 
			if(getEl1().operacao() == false && getEl2().operacao()==true)		
				return true;
		}
		return false;
	}

}
