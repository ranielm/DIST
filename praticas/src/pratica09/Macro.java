package pratica09;

public class Macro {
    public static void main(String[] args){
        AparelhoSom som = new AparelhoSom();
        ComandoAparelhoSom comandoSom = new ComandoAparelhoSom(som);
        
        ArCondicionado ar = new ArCondicionado();
        ComandoArCondicionado comandoAr = new ComandoArCondicionado(ar);
        
        Forno forno = new Forno();
        ComandoForno comandoForno = new ComandoForno(forno);
        
        PanelaEletrica panela = new PanelaEletrica();
        ComandoPanelaEletrica comandoPanela = new ComandoPanelaEletrica(panela);
        
        
        ControleRemoto controle = new ControleRemoto();
        
        controle.setComando(0, comandoAr, comandoAr);
        controle.setComando(1, comandoSom, comandoSom);
        controle.setComando(2, comandoForno, comandoForno);
        controle.setComando(3, comandoPanela, comandoPanela);
        
        controle.pressionaBotaoON(0);
        ar.setTemperatura(22);
        
        controle.pressionaBotaoON(2);
        forno.setTemperatura(200);
        forno.setTimer(30);
        
        controle.pressionaBotaoON(3);
        
        controle.pressionaBotaoON(1);
        som.setVolume(20);
        
        
        
    }
}
