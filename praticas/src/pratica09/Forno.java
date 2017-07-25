package pratica09;

public class Forno {
    private int temperatura;
    private int timer; //minutos
    
    public void ligar(){
        System.out.println("Forno ON");
    }
    
    public void desligar(){
        System.out.println("Forno OFF");
    }
    
    public void setTemperatura(int t){
        if(t<0 && t>400){
            System.out.println("Temepratura invalida");
        }
        else{
            this.temperatura = t;
            System.out.println("A temperatura do forno e " + temperatura);
        }   
    }
    
    public void setTimer(int t){
        if(t<0 && t>300){
            System.out.println("Timer invalido");
        }
        else{
            this.timer = t;
            System.out.println("O timer foi setado em " + timer + " minutos");
        }   
    }
}