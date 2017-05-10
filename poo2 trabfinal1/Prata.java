public class Prata extends Estado 
{
    public Prata(Usuario usuario){
        super(usuario);
        this.nome = "prata";
    }
    public void setLimites(){
        this.limiteInferior_amizade = 5;
        this.limiteSuperior_amizade = 10;
        this.limiteInferior_curtidas = 10;
        this.limiteSuperior_curtidas = 20;
        this.limite_post = 300;
    }
    public void verificarEstado(){
        if(this.usuario.getAmigos() >= this.limiteSuperior_amizade && this.usuario.curtidas >= limiteSuperior_curtidas){
            this.usuario.setEstado(new Ouro(this.usuario));
        }
        else{
            if(this.usuario.getAmigos() < this.limiteInferior_amizade && this.usuario.curtidas <= limiteInferior_curtidas){
                this.usuario.setEstado(new Bronze(this.usuario));
            }
        }
    }
}
