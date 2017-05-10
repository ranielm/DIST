import java.util.ArrayList;
public class Usuario
{
    public String nome;
    public int idade;
    public ArrayList<Usuario> amigos = new ArrayList<Usuario>();
    public int curtidas = 0;
    public Estado estado;
    public ArrayList<Foto> lista_fotos = new ArrayList<Foto>();
    public ArrayList<Status> lista_status = new ArrayList<Status>();
    public Usuario(String nome, int idade)
    {  
        this.nome = nome;
        this.idade = idade;
        this.estado = new Bronze(this);
    }
    public int getAmigos(){
        return this.amigos.size();
    }
    public void removeAmigo(Usuario usuario){
        this.amigos.remove(usuario);
    }
    public void setEstado(Estado e){
        this.estado = e;
    }
}
