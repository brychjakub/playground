import random

class guessANumber():
    def __init__(self):
        None
    def guessNum(self):
        numberToGuess = random.randint(1,10)
        print(numberToGuess)
        while True:
            try:
                guess = int(input("guess the number: "))
                print(f"you guessed {guess}")
                if guess != numberToGuess:
                    guess = input("guess again: ")
                    
                else:
                    while True:
                        try:
                            print("you win, wanna play again?")
                            game = input()
                            print(f"you said {game}")
                            if game == "yes":
                                return self.guessNum()

                            elif game == "no":
                                print("goodbye")
                                break
                        
                        except: 
                            print("only yes or no")
                    
                    break

            except:

                print("use numbers") 

guess = guessANumber()
guess.guessNum()

