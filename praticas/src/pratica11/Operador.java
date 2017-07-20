package pratica11;

public abstract class Operador implements ExpressaoLogica{
	private ExpressaoLogica el1;
	private ExpressaoLogica el2;
	
	public Operador(ExpressaoLogica op1, ExpressaoLogica op2){
		this.el1 = op1;
		this.el2 = op2;	
	}

	public ExpressaoLogica getEl1(){
		return this.el1;
	}
	
	public ExpressaoLogica getEl2(){
		return this.el2;
	}
}