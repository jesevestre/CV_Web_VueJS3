import router from '@/router';
 
export function authGuard(to){
    let token = localStorage.getItem('token');

    if(token == 'tokenConnexionAdminValide'){
        return true;
    } else {
        router.push('/auth/Login');
    }
}