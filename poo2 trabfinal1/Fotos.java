public class Fotos extends Decorator{
    public Fotos(Feed feedDecorado,Usuario user){
        super(feedDecorado);
        for(Usuario u: user.amigos){
                if(u.lista_fotos.size()>0){
                    this.conteudo.add(u.lista_fotos.get(u.lista_fotos.size()-1));
                }
        }
    }
}
