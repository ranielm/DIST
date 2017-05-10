import java.util.ArrayList;
public class VisaoFinal implements Feed
{
    public VisaoFinal(Usuario user){
        if(user.lista_fotos.size() > 0){
            this.conteudo.add(user.lista_fotos.get(user.lista_fotos.size()-1));
        }
        if(user.lista_status.size() > 0){
            this.conteudo.add(user.lista_status.get(user.lista_status.size()-1));
        }
    }
}
