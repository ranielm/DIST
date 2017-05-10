import java.util.ArrayList;
public class main
{
     public static void main(String[] args) {
        ArrayList<Usuario> users = new ArrayList<Usuario>();
        Usuario user1 = new Usuario("Diego",14);
        users.add(user1);
        Usuario user2 = new Usuario("Catarina",18);
        users.add(user2);
        Usuario user3 = new Usuario("Henrique",54);
        users.add(user3);
        Usuario user4 = new Usuario("Leonardo",33);
        users.add(user4);
        Usuario user5 = new Usuario("Neto",18);
        users.add(user5);
        Usuario user6 = new Usuario("Pedro",18);
        users.add(user6);
        
        System.out.println("BEGIN\n");
        
        
        // PADRAO CONTROLE REMOTO
        Foto foto2 = new Foto("legteste",user2);
        System.out.println(foto2.curtidas);
        ControleRemoto remote = new ControleRemoto();
        Comando_curtirFoto comando1 = new Comando_curtirFoto(foto2);
        remote.setComando(comando1,1);
        remote.botãoFoiPressionado(1);
        System.out.println(foto2.curtidas);
        
        // PADRAO STATE
         /*
        Foto foto2 = new Foto("foto1",user1);
        Foto foto3 = new Foto("foto2",user1);
        Comando_curtirFoto comando1 = new Comando_curtirFoto(foto2);
        remote.setComando(comando1,0);
        Comando_curtirFoto comando2 = new Comando_curtirFoto(foto3);
        remote.setComando(comando2,1);
        System.out.println(user1.estado.nome);
        System.out.println(user1.getAmigos());  
        System.out.println(user1.curtidas);  
        user1.estado.addAmigo(user2);
        user1.estado.addAmigo(user3);
        user1.estado.addAmigo(user4);
        user1.estado.addAmigo(user5);
        user1.estado.addAmigo(user6);
        remote.botãoFoiPressionado(0);
        remote.botãoFoiPressionado(0);
        remote.botãoFoiPressionado(0);
        remote.botãoFoiPressionado(0);
        remote.botãoFoiPressionado(0);
        remote.botãoFoiPressionado(1);
        remote.botãoFoiPressionado(1);
        remote.botãoFoiPressionado(1);
        remote.botãoFoiPressionado(1);
        remote.botãoFoiPressionado(1);
        System.out.println(user1.estado.nome);   
        System.out.println(user1.getAmigos());  
        System.out.println(user1.curtidas); /*
        user1.estado.addAmigo(user2);
        user1.estado.addAmigo(user6);
        user2.estado.addAmigo(user3);
        user6.estado.addAmigo(user3);
        user2.estado.addAmigo(user4);
        user6.estado.addAmigo(user4);
        user2.estado.addAmigo(user5);
        user2.estado.addAmigo(user5);
        
        //PADRAO SIMPLE FACTORY
        Cria_Foto foto1 = new Cria_Foto();
        foto1.factoryMethod("foto user1",user1);
        Cria_Foto foto2 = new Cria_Foto();
        foto2.factoryMethod("foto user2",user2);
        Cria_Foto foto3 = new Cria_Foto();
        foto3.factoryMethod("foto user3",user3);
        Cria_Foto foto4 = new Cria_Foto();
        foto4.factoryMethod("foto user4",user4);
        Cria_Foto foto5 = new Cria_Foto();
        foto5.factoryMethod("foto user5",user5);
        Cria_Foto foto6 = new Cria_Foto();
        foto6.factoryMethod("foto user6",user6);
        Cria_Status status1 = new Cria_Status();
        status1.factoryMethod("status user1",user1);
        Cria_Status status2 = new Cria_Status();
        status2.factoryMethod("status user2",user2);
        Cria_Status status3 = new Cria_Status();
        status3.factoryMethod("status user3",user3);
        Cria_Status status4 = new Cria_Status();
        status4.factoryMethod("status user5", user4);
        Cria_Status status5 = new Cria_Status();
        status5.factoryMethod("status user5",user5);
        Cria_Status status6 = new Cria_Status();
        status6.factoryMethod("status user6",user6);
        
        
        //PADRAO FACTORY
        Fabrica_Sugestoes provaveis = new Fabrica_Sugestoes();
        Sugestoes maisp = provaveis.criaSugestoesProvaveis(user1, users);
        ArrayList<Usuario> sugestoes = maisp.getLista();
        System.out.println("Amigos Sugeridos:");
        for(Usuario u: sugestoes){
            System.out.println(u.nome);
        }
        
        //PADRAO DECORATOR
        System.out.println("FEED:");
        Feed visaofinal = new VisaoFinal(user1);
        Feed fotosvf = new Fotos(visaofinal,user1);
        for(Postagem f: visaofinal.conteudo){
            System.out.println(f.texto);
        }*/
     }
}
