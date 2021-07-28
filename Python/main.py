from car import Car
from account import Account

if__name__ == "__main__":
    print("Hola Mundo")

    car = Car("ZBS999", Account("Andres Herrera","AND876"))
    print(vars(car))
    print(vars(car.driver))
    
    

    