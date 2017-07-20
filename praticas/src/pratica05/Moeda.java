package pratica05;

import java.util.Locale;

public class Moeda {

	static String real = "Real";
	static String dollar = "Dollar";
	static String euro = "Euro";
	
	public static Object getMoeda(Locale local) {
		if(local.equals("US"))
		{
			return dollar;	
		}
		
		if(local.equals("BR"))
		{
			return real;	
		}
		
		if(local.equals("UK"))
		{
			return euro;	
		}
		else
			return null;
	}

}