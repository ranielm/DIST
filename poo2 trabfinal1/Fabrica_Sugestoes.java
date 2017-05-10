import java.util.ArrayList;
public class Fabrica_Sugestoes
{
    public Sugestoes s;
    public Sugestoes criaSugestoesProvaveis(Usuario user, ArrayList<Usuario> usuarios)
    {
        ArrayList<Usuario> lista = new ArrayList<Usuario>();
        ArrayList<Usuario> copia = usuarios;
        copia.remove(user);
        int flag = 0;
        for(Usuario i: copia){
            if(user.amigos.contains(i)){
                continue;
            }
            for(Usuario j: i.amigos){
                if(user.amigos.contains(j)){
                    flag = flag + 1;
                }
            }
            if(flag >= 2){
                lista.add(i);
            }
        }
        this.s = new MaisProvavel(lista);
        return s;
    }
    public Sugestoes criaSugestoesImprovaveis(Usuario user, ArrayList<Usuario> usuarios)
    {
        ArrayList<Usuario> lista = new ArrayList<Usuario>();
        ArrayList<Usuario> copia = usuarios;
        copia.remove(user);
        int flag = 0;
        for(Usuario i: copia){
            if(user.amigos.contains(i)){
                continue;
            }
            for(Usuario j: i.amigos){
                if(user.amigos.contains(j)){
                    flag = flag + 1;
                }
            }
            if(flag < 2){
                lista.add(i);
            }
        }
        this.s = new MenosProvavel(lista);
        return s;
    }
}
