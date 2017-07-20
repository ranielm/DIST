package pratica08;

public class FabricaBurguerKing implements FabricaDeLanchonetes{

	@Override
	public Lanchonete criarLanchonete() {
		return new BurguerKing();
	}
	
}