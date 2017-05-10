import java.util.ArrayList;
public class MenosProvavel implements Sugestoes
{
    public ArrayList<Usuario> lista_menosprovavel = new ArrayList<Usuario>();
    
    public MenosProvavel(ArrayList<Usuario> lista)
    {
        this.lista_menosprovavel = lista;
    }
    public ArrayList getLista(){
        return this.lista_menosprovavel;
    }
}
