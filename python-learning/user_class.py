#Ejemplo numero 2 de clases en Python

class Usuario:
    def __init__(self, username, password, email):
        self.username = username
        self.__password = self.__generate_password(password)      # Con el "__" se asigna como atributo privado
        self.email = email
    
    def __generate_password(self, password):
        return password.upper()

    def get_password(self):
        return self.__password


ivan = Usuario('cmelchor', 'root_password', 'ivanmelchormejia@gmail.com')
print(ivan.username)
# print(ivan.__password)
print(ivan.email)
print(ivan.get_password())