package pratica08;

public class BurguerKing implements Lanchonete{

	@Override
	public void fazerPedido() {
		Pedido bauru = new Sanduiche("Bauru", 5);
        bauru = new UmPresuntoExtra("adicional de presunto", 1, bauru);
        System.out.println(bauru.getDescricao() + ". \nTotal: " + bauru.getPreco() + "\n");		
	}

}