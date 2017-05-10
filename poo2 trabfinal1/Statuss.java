public class Statuss extends Decorator{
    public Statuss(Feed feedDecorado,Usuario user){
        super(feedDecorado);
        for(Usuario u: user.amigos){
            if(u.lista_status.size()>0){
                conteudo.add(u.lista_status.get(u.lista_status.size()-1));
            }
        }
    }
}
