input dãy A, K; Out: vị trí của K hoặc-1
mã giả:
binarySearch(A,K)
    left=1, right = n
    while left <= right 
        mid = (left + right)/2 // lay phan nguyen
        if a[mid] == K
            return mid 
        else if a[mid] <k 
            left = mid + 1
        else 
            right = mid - 1
return -1