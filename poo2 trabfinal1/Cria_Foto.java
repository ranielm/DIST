    import java.util.ArrayList;
public class Cria_Foto extends Fabrica_de_Post
{
    public Postagem factoryMethod(String text, Usuario user){
        if(user.estado.limite_post > 0 ){
            user.estado.limite_post = user.estado.limite_post -1;
            Postagem p = new Foto(text, user);
            return p;
        }
        else{
            return null;
        }
    }
}
