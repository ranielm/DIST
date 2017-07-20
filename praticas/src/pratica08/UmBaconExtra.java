package pratica08;

/**
 *
 * @author raniel
 */
public class UmBaconExtra extends Extra
{
    public UmBaconExtra(String descricao, double preco, Pedido pedido)
    {
        super(descricao, preco, pedido);
    }
    
    @Override
    public double getPreco()
    {
        return this.preco+pedido.getPreco();
    }
}