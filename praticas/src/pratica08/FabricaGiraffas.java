package pratica08;

public class FabricaGiraffas implements FabricaDeLanchonetes{

	@Override
	public Lanchonete criarLanchonete() {
		return new Giraffas();
	}
}