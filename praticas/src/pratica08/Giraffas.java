package pratica08;

public class Giraffas implements Lanchonete {

	@Override
	public void fazerPedido() {
		Pedido sanduicheDaCasa = new Sanduiche("Sanduiche da Casa", 16);
        sanduicheDaCasa = new UmBaconExtra("adicional de bacon", 2, sanduicheDaCasa);
        sanduicheDaCasa = new UmQueijoExtra("adicional de queijo", 2, sanduicheDaCasa);
        System.out.println(sanduicheDaCasa.getDescricao() + ". \nTotal: " + sanduicheDaCasa.getPreco() + "\n");
	}

}