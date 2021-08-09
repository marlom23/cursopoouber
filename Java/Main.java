
class Main
 {
    public static void main(String[] args)
     {
        System.out.println();
        UberX uberX = new UberX("AMQ123", new Account ("Andres Herrera", "AND123"), "Chevrolet", "Sonic");
        uberX.setPassenger(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("FGH345", new Account("Enrique Alonzo", "EAN321"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();
      } 

    }
