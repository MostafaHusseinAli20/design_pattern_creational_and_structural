<?php

class DataMapper
{
    private $manger;

    public function __construct(StorageMapper $manager)
    {
        $this->manger = $manager;
    }

    public function findById(int $id)
    {
        return $this->manger->find($id);
    }

    public function saveUser(User $user)
    {
        return $this->manger->save(
            [
                $user->getId() => [
                    'username' => $user->getUsername(),
                    'password' => $user->getPassword()
                ]
            ]
        );
    }
}

// $data = [
//     1 => ['username' => 'Jon Doe', 'password' => '1234567']
// ];
// $storage = new StorageMapper($data);
// $findUser = $storage->find(1);
// echo "User : " . $findUser['username'] . "<br>";

// $user = new User();
// $user->setId(2);
// $user->setUsername('ali');
// $user->setPassword('123456');
// $dataMapper = new DataMapper($storage);
// echo $saveUser = $dataMapper->saveUser($user);
