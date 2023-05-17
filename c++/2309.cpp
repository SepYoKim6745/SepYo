#include<bits/stdc++.h>
using namespace std;
int n[9];
int sum, chk, i, j, tmp;
int main(){
    ios_base::sync_with_stdio(false);
    cin.tie(NULL); cout.tie(NULL);

    for(int i = 0; i < 9; i++){
        cin >> n[i];
        sum += n[i];
    }

    for(i = 0; i < 9; i++){
        for(j = 1; j < 9; j++){
            tmp = sum;
            if(i == j) continue;
            tmp = tmp - n[i] - n[j];
            //cout << "tmp : " << tmp << '\n';
            if(tmp == 100){
                n[i] = 101;
                n[j] = 102;
                break;
            }
        }
        if(tmp == 100) break;
    }
    //cout << "tmp : " << tmp << '\n';
    //cout << i << ", " << j << '\n';
    sort(n, n+9);
    for(int k = 0; k < 7; k++){
        cout << n[k] << '\n';
    }


    
    return 0;
}