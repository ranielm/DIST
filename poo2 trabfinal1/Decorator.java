public abstract class Decorator implements Feed
{
    public Feed feedDecorado;

    public Decorator(Feed feedDecorado){
        this.feedDecorado = feedDecorado;
    }
}
