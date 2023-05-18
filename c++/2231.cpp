#include <bits/stdc++.h>
using namespace std;
int n, sum, tmp, ret;
int main(){

    cin >> n;

    for(int i = 1; i <= n; i++){
        sum = i;
        tmp = i;
        sum += (tmp%10);
        while(tmp /= 10){
            sum += (tmp%10);
        }
        if(sum == n){
            ret = i;
            break;
        }
    }

    if(sum == n) cout << ret << '\n';
    else cout << 0 << '\n';
    return 0;
}