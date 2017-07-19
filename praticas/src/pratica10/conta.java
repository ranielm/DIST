package pratica10;

public abstract class conta {
	private double saldo;

	public void deposita(double valor){
	  saldo = valor;
	}
	
	public void saque(double valor){
	  saldo -=valor;
	  saldo -=this.taxaConta();
	}
	
	//cada conta tem uma taxa diferente
	public abstract double taxaConta();
	 
	public double getSaldo() {
	  return saldo;
	}
}