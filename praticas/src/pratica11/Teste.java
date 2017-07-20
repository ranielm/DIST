public class Teste{
	public static void main(String args[]){
		ExpressaoLogica op1 = new Operando(true);
		ExpressaoLogica op2 = new Operando(false);
		ExpressaoLogica e;
		e = new And(op1,op2);
		System.out.println(op1.operacao()+" And "+op2.operacao() + "= "+e.operacao());
		e = new Or(op1,op2);
		System.out.println(op1.operacao()+" Or "+op2.operacao() + "= "+e.operacao());
		e = new Not(op2);
		System.out.println("Not "+op2.operacao() + "= "+e.operacao());
		e = new Xor(op1,op2);
		System.out.println(op1.operacao()+" Xor "+op2.operacao() + "= "+e.operacao());

		e = new And(new Xor(new Operando(true),new Operando(false)),new Not(new Operando(false)));
	 	System.out.println(e.operacao()); 	
	}
}
