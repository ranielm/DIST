package pratica08;

/**
 *
 * @author raniel
 */
public class Sanduiche implements Pedido
{
    private String descricao;
    private double preco;
    
    public Sanduiche(String descricao, double preco) 
    {
        this.descricao=descricao;
        this.preco=preco;
    }
    
    @Override
    public double getPreco() 
    {
        return this.preco;   
    }

    @Override
    public String getDescricao() 
    {
        return this.descricao;
    }    
}