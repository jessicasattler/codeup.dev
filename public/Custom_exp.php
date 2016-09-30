<?php 

//exception is for developer
//catch is usually for normal users
class InvalidNameException extends Exception { }
class EmptyNameException extends InvalidNameException { }

class Person
{
    // ...

    protected function setFirstName($firstName)
    {
        if (!is_string($firstName)) {
            throw new InvalidNameException('$firstName must be a string!');
        }

        $firstName = trim($firstName);

        if (empty($firstName)) {
            throw new EmptyNameException('$firstName was an empty string!');
        }

        $this->firstName = $firstName;
    }
}

try {
    $test = new Person(' ', 42);
} catch (EmptyNameException $e) {
    echo "The name was empty!\n";
} catch (InvalidNameException $e) {
    echo "An invalid type was assigned to the name!\n";
} catch (Exception $e) {
    echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;
}

echo "I am still always run\n";