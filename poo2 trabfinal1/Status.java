public class Status extends Postagem 
{
    
    public Status(String texto,Usuario usuario)
    {
        this.usuario = usuario;
        this.texto = texto;
        this.usuario.lista_status.add(this);
    }
}
