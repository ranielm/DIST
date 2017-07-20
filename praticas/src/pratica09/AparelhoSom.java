package controle.remoto;

public class AparelhoSom {
    private int volume;
    
    public void ligar(){
        System.out.println("Aparelho de som ON");
    }
    
    public void desligar(){
        System.out.println("Aparelho de som OFF");
    }
    
    public void setVolume(int v){
        if(v<0 && v>100){
            System.out.println("Temepratura invalida");
        }
        else{
            this.volume = v;
            System.out.println("O volume do aparelho de som e " + volume);
        }   
    }
}