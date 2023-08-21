import random

class RockPaperScissors():
    def __init__(self):
        self.options = ["rock","paper","scissors"]

    def computer(self, options):
        PCchoice = options[random.randint(0,2)]
        print(PCchoice)

        return PCchoice    


    def player(self):
        player = input("what will it be: rock, paper or scissors? ")
        return player
        
    def play(self):
        playerGame = self.player()
        while True:
            try:
                if playerGame == "rock":
                    if self.computer() == "rock":
                        print("it's a draw! play again")

                    elif self.computer() == "paper":
                        print("you loose") 

                    elif self.computer() == "scissors":
                        print("you win")
                
                elif self.player() == "paper":
                    if self.computer() == "paper":
                        print("it's a draw! play again")

                    elif self.computer() == "scissors":
                        print("you loose") 

                    elif self.computer() == "rock":
                        print("you win")
                
                elif self.player() == "scissors":
                    if self.computer() == "scissors":
                        print("it's a draw! play again")

                    elif self.computer() == "rock":
                        print("you loose") 

                    elif self.computer() == "paper":
                        print("you win")
                
            except:
                print("you can say only rock, paper or scissors")
    


game = RockPaperScissors()

game.play()