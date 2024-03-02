import {Link, Head, usePage} from '@inertiajs/react';

interface Props {
    [key: string]: any;
}

const Welcome = () => {
    const users = usePage<Props>().props.users;
    console.log(users);
    return (
        <>
            {
                users.map((user: any) => {
                    return (
                        <div className={`user`} key={user.id}>
                            {user.name}
                        </div>
                    );
                })
            }
        </>
    );
}

export default Welcome;
